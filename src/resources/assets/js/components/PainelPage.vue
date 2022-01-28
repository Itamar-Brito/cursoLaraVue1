<template>
        <div v-bind:class="defineCor">
          <div class="panel-heading">{{titulo}}</div>
          <div class="panel-body">
              <slot></slot>
          </div>
            
        </div>

</template>
<script>
export default {
    props: ["titulo","cor"],
    computed: {
      defineCor: function (){
        return "panel "+ (this.cor || "panel-default")
      }
    }
}
</script>
<style scoped>

.blue {
  border-color: #0d4a96;
}

.blue > .panel-heading {
  color: white;
  background-color: #0d4a96;
  border-color: #0d4a96;
}

.orange {
  border-color: #ff6600e7;
}

.orange > .panel-heading {
  color: white;
  background-color: #ff6600e7;
  border-color: #ff6600e7;
}
</style>
