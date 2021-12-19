<template>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Example Component</div>
            <h1> {{dado}} </h1>
          <div class="panel-body">
            I'm an example component! testando.... eita
            <input type="text" v-model="dado" name="" id="" />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "HelloWorld",
  data: function () {
    return {
      dado: 'asdasda',
    };
  },

  mounted() {
    console.log("Component mounted.");
  },
  created() {
    console.log("testee");
  },
};
</script>
