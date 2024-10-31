<template>
  <div class="header">
    <h1>Mini-Twitter</h1>
    <p>Meine Tweets</p>
    <router-link to="/new">+ Tweet erstellen</router-link>
  </div>

</template>

<style scoped>
.header {
  display: flex;
  flex-flow: row nowrap;
  justify-content: space-between;
  
  background-color: aliceblue
}

h1 {
  font-family: Inter;
  font-size: 24px;
  font-weight: 900;
  line-height: 29.05px;
  letter-spacing: -0.02em;
  text-align: left;
}

p {
  font-family: Inter;
  font-size: 18px;
  font-weight: 700;
  line-height: 21.78px;
  text-align: left;
}
</style>