<template>
        <div v-if="pokemon">
            <div class="center">
                <div class="grid-evolution">
                    <div class="box-evolution">
                        {{ pokemon.name }}
                        <img :src="pokemon.sprites.front_default" alt="" />
                    </div>
                </div>
            </div>
            
            <div>
            <h3>Evolutions</h3>
            <Evolution
                :data="pokemon.species.url"
            />
            <h3>Types</h3>
            <a v-for="type in pokemon.types" :key="type.type.name">{{ type.type.name + ", " }}</a>
            <h3>Abilities</h3>
            <a v-for="ability in pokemon.abilities" :key="ability.ability.name">{{ ability.ability.name + ", " }}</a>
        </div>
    </div>
    
</template>

<script>
import axios from 'axios';
import Evolution from './Evolution.vue';

export default {
    name: "PokemonDetail",
    components: {
        Evolution
    },
    data(){
        return {
            pokemon: null,
            name: "bulbasaur",
        }
    },
    methods: {
    async getPokemon(){
        var name = this.$route.query.name
        axios.get("https://pokeapi.co/api/v2/pokemon/" + name)
            .then(response => {
                this.pokemon = response.data;
                console.log(this.pokemon)
            })
            .catch(e => {
                console.log(e);
            })
        },
    },
    beforeMount(){
        this.getPokemon();
    }
}
</script>
