<template>
  <h1>Neuen Tweet erstellen</h1>

    <form id="neuer-tweet" method="POST" action="" @submit.prevent="handleSubmit" >
      <div>
        <label for="a">Titel: </label>
        <input id="a" v-model="formular.titel" />
      </div>

      <div>
        <label for="b">Text: </label>
        <textarea id="b" v-model="formular.text"></textarea>
      </div>

      <button type="submit">Senden</button>
    </form>
    
  <router-link to="/all">Alle Tweets anzeigen</router-link>
</template>

  <script setup>
    // function validate() {
    //   event.preventDefault();
    //   console.log("This is a test");
    // }
    
    import axios from "axios"
    import { reactive, ref } from "vue"
    import { useRouter } from "vue-router"
  
    const response = ref();
    const formular = reactive({
      titel: '',
      text: ''
    })
    const router = useRouter()
  
    const handleSubmit = async () => {
      try {
        // console.log(formular.titel)
        // console.log(formular.text)
        response.value = await axios.post('/api/new', { requestTitle: formular.titel, requestText: formular.text })
        router.push('/all')
      } catch (error) {
        // Do something with the error
        console.log("FEHLERMELDUNG: ")
        console.log(error)
      }
    };
  
  </script>
