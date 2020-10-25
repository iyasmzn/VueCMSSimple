<template>
  <div>
    <h1>CRUD ARTICLE</h1>

    <form @submit.prevent="onSubmit">
      <hr />

      <h3>FORM</h3>

      <label>
        <strong>Title : </strong>
        <input type="text" v-model="form.title" />
      </label>
      <br /><br />
      <label>
        <strong>Content : </strong>
        <textarea rows="5" v-model="form.content"></textarea>
      </label>
      <br /><br />
      <label>
        <strong>Author : </strong>
        <input type="text" v-model="form.author" />
      </label>
      <br /><br />
      <label>
        <strong>Date : </strong>
        <input type="date" v-model="form.date" />
      </label>
      <br /><br />
      <button>SUbmIT</button>
    </form>

    <hr />

    <h3>TABLE</h3>

    <table border="1">
      <thead>
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th width="200">Content</th>
          <th>Author</th>
          <th>Date</th>
          <th>Act</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="article in articles" :key="article.id">
          <td>{{ article.id }}</td>
          <td>{{ article.title }}</td>
          <td>{{ article.content }}</td>
          <td>{{ article.author }}</td>
          <td>{{ article.date }}</td>
          <td>
            <button @click="editData(article.id)">Edit</button>
            <button @click="deleteData(article.id)">Hapus</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
const initialForm = () => ({
  id: null,
  title: null,
  content: null,
  author: null,
  date: null,
});

export default {
  data() {
    return {
      isEdit: false,
      form: initialForm(),
      articles: [
        {
          id: 1,
          title: "Presiden gigit telinga anjing!",
          content:
            "Presiden gigit telinga anjing!Presiden gigit telinga anjing!Presiden gigit telinga anjing!Presiden gigit telinga anjing!Presiden gigit telinga anjing!Presiden gigit telinga anjing!Presiden gigit telinga anjing!Presiden gigit telinga anjing!Presiden gigit telinga anjing!",
          author: "President!",
          date: "2020-12-01",
        },
        {
          id: 2,
          title: "Presiden gigit telinga anjing!2",
          content:
            "Presiden gigit telinga anjing2!Presiden gigit telinga anjing2!Presiden gigit telinga anjing2!Presiden gigit telinga anjing2!Presiden gigit telinga anjing2!Presiden gigit telinga anjing2!Presiden gigit telinga anjing2!Presiden gigit telinga anjing2!Presiden gigit telinga anjing2!",
          author: "President2!",
          date: "2020-12-02",
        },
      ],
    };
  },
  methods: {
    onCreate() {
      this.form.id = new Date().getTime();
      this.articles.push(this.form);
      this.form = initialForm();
    },
    onEdit() {
      const newArticle = [...this.articles];
      const index = newArticle.findIndex(
        (article) => article.id == this.form.id
      );
      newArticle[index] = Object.assign({}, this.form);
      this.articles = newArticle;
      this.isEdit = false;
      this.form = initialForm();
    },
    editData(id) {
      const data = this.articles.find((article) => article.id == id);
      this.isEdit = true;
      this.form = Object.assign({}, data);
    },
    deleteData(id) {
      const index = this.articles.findIndex((article) => article.id == id);
      this.articles.splice(index, 1);
    },
    onSubmit() {
      if (this.isEdit) {
        this.onEdit();
      } else {
        this.onCreate();
      }
    },
  },
};
</script>
