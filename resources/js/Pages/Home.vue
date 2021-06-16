<template>
  <div>
    <h1>Home</h1>
    <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
      <blockquote>
        <p class="text-lg font-semibold">
          “Tailwind CSS is the only framework that I've seen scale on large
          teams. It’s easy to customize, adapts to any design, and the build
          size is tiny.”
        </p>
      </blockquote>
      <figcaption class="font-medium">
        <div class="text-cyan-600">Sarah Dayan</div>
        <div class="text-gray-500">Staff Engineer, Algolia</div>
      </figcaption>
    </div>
  </div>
</template>

<style scoped>
</style>

<script>
import axios from "axios";

export default {
  name: "Home",
  data() {
    return {};
  },
  mounted() {
    const vm = this;
    vm.getData();
  },
  methods: {
    getData() {
      const vm = this;
      const urlPath = "https://api.whatdoestrumpthink.com/api/v1/quotes/random";
      // vm.axios({
      //     method: 'get',
      //     url: urlPath,
      //     headers: {
      //         Accept: 'application/json',
      //         // Authorization: vm.$store.getters.tokenType + ' ' + vm.$store.getters.accessToken
      //     }
      // }).then((response) => {
      //     // console.log(response.data);
      // }).catch(function (error) {
      //     // handle error
      //     // console.log(error);

      // });

      var quotes = axios
        .get("https://api.whatdoestrumpthink.com/api/v1/quotes/random")
        .then((response) => (this.info = response.data.bpi));
    },
  },
};
</script>
