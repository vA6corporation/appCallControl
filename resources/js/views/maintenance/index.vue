<template lang="pug">
.row
  .col-4
    ul.list-group
      li.list-group-item.list-group-item-info.d-flex.justify-content-between
        | Lugares
        a(href='#') Agregar
      li.list-group-item(v-for='(item, index) in places')
  .col-4
    ul.list-group
      li.list-group-item.list-group-item-info.d-flex.justify-content-between
        | Tipos
        a(href='#') Agregar
      li.list-group-item(v-for='(item, index) in types')
  .col-4
    ul.list-group
      li.list-group-item.list-group-item-info.d-flex.justify-content-between
        | Seleccion
        a(href='#') Agregar
      li.list-grou-item(v-for='(item, index) in selections')
</template>

<script>
// import CategoryModal from '@/components/CategoryModal.vue'
// import PlaceModal from '@/components/maintenance/PlaceModal.vue'
// import SelectionModal from '@/components/maintenance/SelectionModal.vue'
// import TypeModal from '@/components/maintenance/TypeModal.vue'
export default {
  components: {
    CategoryModal,
    PlaceModal,
    SelectionModal,
    TypeModal,
  },
  mounted() {
    this.$http.get('maintenances/places').then(response => {
      console.log(response);
    }, response => {
      console.log(response);
    });
    this.$http.get('maintenance/types').then(response => {
      console.log(reponse);
    }, response => {
      console.log(response);
    });
    this.$http.get('maintenances/selection').then(response => {
      console.log(response);
    }, response => {
      console.log(reponse);
    });
  },
  data() {
    return {
      places: [],
      types: [],
      selections: [],
    }
  }
}
</script>

<style lang="css">
</style>
