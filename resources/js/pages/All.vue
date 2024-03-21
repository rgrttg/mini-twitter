<script setup>
  import axios from "axios";
  import { ref } from "vue";

  const response = ref();

  const getAll = async () => {
    try {
      let apiResponse = await axios.get("/api/all");
      // console.log(apiResponse);
      response.value = apiResponse.data;
      // console.log(response.value);
      } catch (error) {
      // Do something with the error
        console.log(error);
    }
  };

  getAll();
</script>

<template>
  <router-link to="/new">+ Tweet erstellen</router-link>
  <h1> Feed von </h1>
    <h2> Vorname Nachname </h2>
    <ul>
      <li v-for="tweet in response ">
        {{ tweet.id }}<br>
        {{ tweet.title }}<br>
        {{ tweet.text }}<br>
        <!-- hier noch auf ~/tweet/id~ verlinken -->
        <!-- <router-link v-bind:to="'/tweet/' + tweet.id">Tweet ansehen</router-link> -->
        <!-- oder kürzer -->
        <router-link :to="`/tweet/${tweet.id}`">Tweet ansehen</router-link>

      </li>
    </ul>
</template>
