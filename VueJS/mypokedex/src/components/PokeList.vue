<template>
    <div id="List">
        <select v-model="pokemonFiltre.pokemonType" name = "pokemonType">
            <optgroup label="Type">
                <option value="0">All</option>
                <option value="normal">Normal</option>
                <option value="fighting">Fighting</option>
                <option value="flying">Flying</option>
                <option value="poison">Poison</option>
                <option value="ground">Ground</option>
                <option value="rock">Rock</option>
                <option value="bug">Bug</option>
                <option value="ghost">Ghost</option>
                <option value="steel">Steel</option>
                <option value="fire">Fire</option>
                <option value="water">Water</option>
                <option value="grass">Grass</option>
                <option value="electric">Electric</option>
                <option value="psychic">Psychic</option>
                <option value="ice">Ice</option>
                <option value="dragon">Dragon</option>
                <option value="dark">Dark</option>
                <option value="fairy">Fairy</option>
                <option value="unknown">Unknown</option>
                <option value="shadow">Shadow</option>
            </optgroup>
        </select>
        <button v-on:click="update()">Search</button> <br>
        <img src="../assets/Pokedex.png">
        <div class="center">
            <div class="grid">
            <Pokemon
            v-for="pokemon in pokemons"
            :key="pokemon.name"
            :data="pokemon"
            :type="pokemonFiltre.pokemonType"
            />
            </div>
        </div>
        <button v-if="previous" v-on:click="previousPage()">Previous</button>
        <button v-if="next" v-on:click="nextPage()">Next</button>
    </div>
</template>

<script>
import axios from 'axios';
import Pokemon from './Pokemon.vue';

export default {
    name: "List",
    components: {
    Pokemon
    },
    data(){
        return {
            pokemons: [],
            previous: "",
            next: "",
            page: 0,
            pokemonFiltre: {
      	        pokemonType: '0',
            },
        }
    },
    methods: {
        getList(){
            axios.get("https://pokeapi.co/api/v2/pokemon/?limit=25")
            .then(response => {
                this.pokemons = response.data["results"];
                this.next = response.data["next"];
                this.previous = response.data["previous"];
            })
            .catch(e => {
                console.log(e);
            })
        },
        nextPage() {
            axios.get(this.next)
            .then(response => {
                this.pokemons = response.data["results"];
                this.next = response.data["next"];
                this.previous = response.data["previous"];
            })
            .catch(e => {
                console.log(e);
            })
        },
        previousPage() {
            axios.get(this.previous)
            .then(response => {
                this.pokemons = response.data["results"];
                this.next = response.data["next"];
                this.previous = response.data["previous"];
            })
            .catch(e => {
                console.log(e);
            })
        },
        update(){
            this.pokemons = [];
            this.next = "";
            this.previous = "";
            axios.get("https://pokeapi.co/api/v2/pokemon/?limit=25")
            .then(response => {
                this.pokemons = response.data["results"];
                this.next = response.data["next"];
                this.previous = response.data["previous"];
            })
            .catch(e => {
                console.log(e);
            })
        }
    },
    beforeMount(){
        this.getList();
    }
}
</script>
