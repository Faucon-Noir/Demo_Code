<template>
    <div v-if="pokemon">
        <span>{{ pokemon.name }}</span><br>
        <a v-bind:href="'pokemon?name=' + pokemon['name']">
            <img :src="pokemon.sprites.front_default" />
        </a>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    props: ["data","type"],
    name: "Pokemon",
    data(){
        return {
            pokemon: null,
        }
    },
    methods: {
        sameType(types) {
            var len = types.length;
            var i = 0;
            while (i < len) {
                console.log(this.type + " --- " + types[i].type.name)
                if (this.type == types[i].type.name) {
                    console.log("same");
                    return true;
                }
                i++
            }
            return false;
        },
    },
    async created () {
        const data = await axios.get(this.data.url);
        console.log(data.data)
        if(this.type == "0") {
            this.pokemon = data.data;
        } else if(this.sameType(data.data.types)){
            this.pokemon = data.data;
        }
    },  
}
</script>
