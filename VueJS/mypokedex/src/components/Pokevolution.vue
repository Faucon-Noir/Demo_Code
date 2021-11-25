<template>
    <div class="center">
            <div v-if="pokemon" class="box-evolution">
                {{ pokemon.name }}
                <a v-bind:href="'pokemon?name=' + pokemon['name']"> 
                    <img :src="pokemon.sprites.front_default" />
                </a>
            </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    props: ["data"],
    name: "Pokemon",
    data(){
        return {
            pokemon: null,
        }
    },
    async created () {
        console.log(this.data)
        const data = await axios.get("https://pokeapi.co/api/v2/pokemon/" + this.data);
        this.pokemon = data.data;
    },  
}
</script>