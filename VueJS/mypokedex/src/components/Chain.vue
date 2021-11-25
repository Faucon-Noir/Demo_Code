<template>
    <div v-if="evolves">
        <Pokevolution 
            v-for="evolve in evolves"
            :key="evolve.name"
            :data="evolve.name"
        />
    </div>
</template>

<script>
import axios from 'axios';
import Pokevolution from './Pokevolution.vue';

export default {
    props: ["data"],
    name: "evolution",
    components: {
        Pokevolution
    },
    data(){
        return {
            evolves: [],
        }
    },
    async created () {
        const data = await axios.get(this.data);
        var poke = data.data.chain;
        while(poke.evolves_to.length > 0) {
            this.evolves.push(poke.species);
            poke = poke.evolves_to[0];
        }
        this.evolves.push(poke.species);
        console.log(this.evolves)
    },  
}
</script>
