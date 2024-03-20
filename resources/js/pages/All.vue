
<script setup>
    import axios from "axios";
    import { ref } from "vue";

    const response = ref();

    const getValue = async () => {
        try {
            let apiResponse = await axios.get("/api/all");
            // console.log(apiResponse);
            response.value = apiResponse.data;
            console.log(response.value);
        } catch (error) {
            // Do something with the error
            console.log(error);
        }
    };

    getValue();
</script>

<template>
  <h1>Alle Tweets</h1>
    <ul>
      <li v-for="tweet in response ">
        {{ tweet.title }}<br>
        {{ tweet.text }}
      </li>
    </ul>

  <!-- <router-link to="/">Link zur Home Seite</router-link> -->
  <router-link to="/new">Neuen Tweet erstellen</router-link>
</template>
