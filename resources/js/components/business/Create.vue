<template lang="html">
  <div class="row">
    <div class="col-12">
      <div class="card p-3 col-12 shadow-sm form-group">
        <div class="row">
          <div class="col-12 form-group">
            <div class="d-flex justify-content-between">
              <span class="lead">Nueva Empresa</span>
              <a class="" href='#'>Agregar
                <i data-feather="plus"></i>
              </a>
            </div>
          </div>
          <div class="col-3 form-group">
            <input class='form-control' type="text" name="" value="" placeholder="Empresa">
          </div>
          <div class="col-3">
            <input type="text" class='form-control' name="" value="" placeholder="Empleados">
          </div>
          <div class="col-3">
            <input type="text" class='form-control' name="" value="" placeholder="Telefono">
          </div>
          <div class="col-3">
            <input type="text" class='form-control' name="" value="" placeholder="Dato">
          </div>
          <div class="col-12">
            <textarea class="form-control" @input='getExcel()' v-model='stringExcel' rows="2" placeholder="Puedes copiar y pegar aqui desde una plantailla de Excel"></textarea>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card p-3 shadow-sm">
        <div class="d-flex justify-content-between form-group">
          <span class="lead">Lista de Empresas</span>
          <a href='#'> Subir
            <i data-feather='arrow-up'></i>
          </a>
        </div>
        <ul class="list-group list-group-item-flush">
          <li class="list-group-item" v-for='(item, index) in businesses'>{{ item.empresa }}</li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      stringExcel: '',
      businesses: [],
    }
  },
  methods: {
    getExcel() {
      var rows = this.stringExcel.split('\n');
      rows.forEach(item => {
        var data = item.split('\t');
        var business = {
          empresa: data[0],
          empleados: data[1],
          telefono: data[2],
          dato: data[3],
        }
        this.businesses.push(business);
      })
    }
  }
}
</script>

<style lang="css">
</style>
