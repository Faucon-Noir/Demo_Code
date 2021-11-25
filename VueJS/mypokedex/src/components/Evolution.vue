<template>
    <div v-if="pokemon">
        <Chain
            :data="pokemon.evolution_chain.url"
        />
    </div>
</template>

<script>
import axios from 'axios';
import Chain from './Chain.vue';

export default {
    props: ["data"],
    name: "evolution",
    components: {
        Chain
    },
    data(){
        return {
            pokemon: null,
        }
    },
    async created () {
        const data = await axios.get(this.data);
        this.pokemon = data.data;
    },  
}
</script>
