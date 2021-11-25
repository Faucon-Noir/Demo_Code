<template>
  <div id="app">
    <nav>
      <button>
        <router-link to="/">Home</router-link>
      </button>
      <button>
        <router-link to="/list">List</router-link>
      </button>
    </nav>
    <router-view/>
  </div>
</template>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

nav button {
  height: 35px;
  width: 70px;
  font-size: 15px;
  border-radius: 10px;
  font-weight: bold;
  text-align: center;
  text-decoration: none, black;
}

select {
  border-radius: 4px;
  box-shadow: 0px 1.5px black;
}

button {
  border-radius: 4px;
  text-decoration: none, black;
}

html {
  background-image: url(assets/background.jpg);
  background-attachment: fixed;
  background-repeat: no-repeat;
  background-size: 100%;
  background-position-y: -90px;
}
.box {
  background-color: rgba(248, 246, 246, 0.753);
  padding: 10px;
  margin: 25px;
  width: 100px;
  border-radius: 10px;
  box-shadow: 0px 1.5px black;
}

.grid {
  /*background-color: rgba(255, 0, 0, 0.685);*/
  display: grid;
  grid-template-columns: 150px 150px 150px 150px 150px;
  row-gap: 10px;
  column-gap: 50px; 
  align-items: center;
  justify-items: center;
  border-radius: 10px;
  padding-left: 10px;
  padding-right: 10px;
}

.center {
  /*background-color: rgba(0, 0, 255, 0.726);*/
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100px;
  margin-left: 500px;
  margin-right: 500px;
  padding-right: 50px;
  padding-left: 50px;
  border-radius: 10px;
}

.box-evolution {
  background-color: rgba(248, 246, 246, 0.753);
  padding: 10px;
  margin: 25px;
  width: 100px;
  border-radius: 10px;
  box-shadow: 0px 1.5px black;
  justify-content: center;
}

</style>
