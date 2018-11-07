<template lang="pug">
#placeModal.modal.fade(tabindex='-1', role='dialog', aria-labelledby='exampleModalLabel', aria-hidden='true')
  .modal-dialog(role='document')
    .modal-content
      .modal-header
        h5.modal-title Nuevo Tipo
        button.close(type='button', data-dismiss='modal', aria-label='Close')
          span(aria-hidden='true') ×
      .modal-body
        input.form-control(v-model='type.name' type='text')
      .modal-footer
        button.btn.btn-secondary(type='button', data-dismiss='modal') Cancelar
        button.btn.btn-primary(type='button') Guardar
</template>

<script>
export default {
  data() {
    return {
      type: {
        name: '',
      }
    }
  }
}
</script>

<style lang="css">
</style>
