<template>
  <div>
    <sitebar></sitebar>
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <ul>
            <li v-for="note in notes" :key="note.id">
              <a href="#">
                <span id="deleteNote">
                  <i class="fas fa-times" @click.prevent="deleteNote"></i>
                </span>
                <h2>{{note.title}}</h2>
                <p v-if=" note.body.length<70 ">{{note.body}}</p>
                <p v-else="note.body.length">{{note.body.substring(0,70)+"..."}}</p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import sitebar from "./Sitebar";
export default {
  components: {
    sitebar
  },
  data() {
    return {
      notes: [],
      note: {
        id: 0,
        title: "",
        body: ""
      }
    };
  },
  mounted() {
    this.getNotes();
  },
  methods: {
    getNotes() {
      axios.get("/api/notes").then(response => {
        console.log(response);
        this.notes = response.data;
      });
    },
    deleteNote() {
      axios.delete(`/notes/${this.id}`).then(console.log("delete success"));
    }
  }
};
</script>

<style scoped>
* {
  margin: 0;
  padding: 0;
}

body {
  font-family: arial, sans-serif;
  font-size: 100%;
  margin: 1em;
  background: #666;
  color: #fff;
}
#deleteNote {
  position: relative;
  left: 249px;
  top: -9px;
}
h2,
p {
  font-size: 100%;
  font-weight: normal;
}

ul,
li {
  list-style: none;
}

ul {
  overflow: hidden;
  padding: 3em;
}

ul li a {
  text-decoration: none;
  color: #000;
  background: #ffc;
  display: block;
  height: 20em;
  width: 20em;
  padding: 1em;
  -moz-box-shadow: 5px 5px 7px rgba(33, 33, 33, 1);
  -webkit-box-shadow: 5px 5px 7px rgba(33, 33, 33, 0.7);
  box-shadow: 5px 5px 7px rgba(33, 33, 33, 0.7);
}

ul li {
  margin: 1em;
  float: left;
}

ul li h2 {
  font-size: 140%;
  font-weight: bold;
  padding-bottom: 10px;
}

ul li p {
  font-family: "Reenie Beanie", arial, sans-serif;
  font-size: 180%;
}

ul li:nth-child(even) a {
  top: 5px;
  background: #cfc;
}

ul li:nth-child(3n) a {
  position: relative;
  top: -5px;
  background: #ccf;
}

ul li:nth-child(5n) a {
  position: relative;
  top: -10px;
}

ul li a:hover,
ul li a:focus {
  box-shadow: 10px 10px 7px rgba(0, 0, 0, 0.7);
  -moz-box-shadow: 10px 10px 7px rgba(0, 0, 0, 0.7);
  -webkit-box-shadow: 10px 10px 7px rgba(0, 0, 0, 0.7);
  position: relative;
  z-index: 5;
}

ol {
  text-align: center;
}

ol li {
  display: inline;
  padding-right: 1em;
}

ol li a {
  color: #fff;
}
</style>
