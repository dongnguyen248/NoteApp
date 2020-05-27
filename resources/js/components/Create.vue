<template>
  <div>
    <form @submit.prevent="saveNote">
      <div class="form-group">
        <label for="title">Note Title</label>
        <input type="text" id="title" name="title" class="form-control" v-model="title" />
      </div>
      <div class="form-group">
        <label for="body">Note Content</label>
        <textarea
          cols="30"
          rows="10"
          type="text"
          id="body"
          name="body"
          class="form-control"
          v-model="body"
        ></textarea>
      </div>
      <div class="form-grou">
        <button class="btn btn-primary" type="submit">Save</button>
      </div>
    </form>
  </div>
</template>
<script>
export default {
  data() {
    return {
      title: "",
      body: "",
      id: 0
    };
  },
  methods: {
    saveNote() {
      console.log(this.title);
      console.log(this.body);
      axios
        .post("/api/notes", {
          title: this.title,
          body: this.body
          // id:this.
        })
        .then(response => {})
        .catch(error => {
          console.log(error);
        });
    }
  }
};
</script>
<style scope>
</style>