<script setup>
  // import Route;
  import axios from "axios";
  import { ref } from "vue";
  import { onBeforeMount } from 'vue'

  // const route = useRoute()
  // const tweet = ref(null)
  const tweet = ref()

  const getTweetById = async () => {
    try {
      // let apiResponse = await axios.get("/api/tweet/1")
      let apiResponse = await axios.get("/api/tweet", { requestId: "1"})
      // console.log(apiResponse);
      tweet.value = apiResponse.data
      console.log(tweet.value);
      } catch (error) {
      // Do something with the error
        console.log("FEHLERMELDUNG: ")
        console.log(error)
    }
  };

  // 1. immer ausführen
  // getTweetById(1)

  // 2. on before mount ausführen
  // onBeforeMount(getTweetById() => void)
  onBeforeMount(() => getTweetById(1))
  
  
  // 3. einen watcher verwenden
  // watch()
  //   () => route.params.id,
  //   async (newId) => {
  //     tweet.value = await getTweetById(newId)},
  //     { immediate true}
  //   }
</script>

<template>
  <h1>Tweet vom 01.01.2023</h1>
  <h2>{{ tweet.title }}</h2>
  <h3>{{ tweet.text }}</h3>
  <router-link to="/">Tweet bearbeiten </router-link><br>
  <router-link to="/"> Tweet löschen</router-link>
</template>