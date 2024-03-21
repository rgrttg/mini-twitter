<script setup>
  import axios from "axios";
  import { ref } from "vue";
  import { onBeforeMount } from 'vue'
  import { useRoute } from "vue-router"

  const route = useRoute()
  // const tweet = ref() zeigt tweet zwar an, gibt aber ein:
  // Uncaught (in promise) TypeError: Cannot read properties of undefined (reading 'id')
  const tweet = ref({id: '', title: '', text: ''})

  const getTweetById = async () => {
    try {
      // let apiResponse = await axios.get(`/api/tweet/${route.params.id}`);
      let apiResponse = await axios.get("/api/tweet", { params: { requestId: route.params.id } });
      // console.log(apiResponse)
      tweet.value = apiResponse.data
      // console.log(tweet.value)
      } catch (error) {
      // Do something with the error
        console.log("FEHLERMELDUNG: ")
        console.log(error)
    }
  };

  // 1. immer ausführen
  // getTweetById()

  // 2. on before mount ausführen
  onBeforeMount(() => getTweetById())
  
  // 3. einen watcher verwenden
  // watch: {
  //   () => route.params.id,
  //     async (newId) => {
  //       tweet.value = await getTweetById(newId)
  //     },
  //     { immediate: true}
  //   }
</script>

<template>
  <h1>Tweet Nr. {{ tweet.id }}</h1>
  <h2>{{ tweet.title }}</h2>
  <h3>{{ tweet.text }}</h3>
  <!-- hier noch auf ~/edit/id~ verlinken -->
  <router-link to="/">Tweet bearbeiten </router-link><br>
  <!-- hier noch auf ~/delete/id~ verlinken -->
  <router-link to="/"> Tweet löschen</router-link>
</template>