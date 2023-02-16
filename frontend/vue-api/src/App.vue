<script>
import HeaderVue from "./components/HeaderVue.vue"
import axios from "axios"
export default {
  components: {
    HeaderVue
  },
  data() {
    return {
      movies: [],
      title: ""
    }

  },
  methods: {
    moviesApi() {
      axios.get("http://localhost:8000/api/movies")
        .then(res => (
          this.movies = res.data.movies

        ))
    },
    color() {
      this.title = document.getElementById("title");
      this.title.style.color = "blue";
    }
  },
  mounted() {
    this.moviesApi()
  }

}
</script>

<template>
  <header>
    <HeaderVue />

  </header>
  <h1 id="title"
    @click="color()">Movies</h1> <br>
  <ul>
    <li v-for="movie in movies">
      <strong>Movie Name : </strong> {{ movie.name }} <br>
      <strong>Release Year : </strong> {{ movie.year }} <br>
      <strong>Genre : </strong> {{ movie.genre.name }} <br>
      <strong>Tags : </strong>
    <li v-for="tags in movie.tags">
      {{ tags.name }}
    </li> <br> <br>

    <hr>
    <br>
    </li>

</ul>
</template>

<style></style>
