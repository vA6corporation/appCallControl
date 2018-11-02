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
          <a href='#' @click='submit()'> Subir
            <i data-feather='arrow-up'></i>
          </a>
        </div>
        <table class="table table-striped table-bordered">
          <thead>
            <th>Empresa</th>
            <th>Trabajadores</th>
            <th>Telefonos</th>
            <th>Dato</th>
          </thead>
          <tbody>
            <tr v-for='(item, index) in businesses'>
              <td>{{ item.name }}</td>
              <td>{{ item.employees }}</td>
              <td>{{ item.telephone }}</td>
              <td>{{ item.date }}</td>
            </tr>
          </tbody>
        </table>
        <!-- <ul class="list-group list-group-item-flush">
          <li class="list-group-item" v-for='(item, index) in businesses'>{{ item.name }}</li>
        </ul> -->
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
    submit() {
      console.log('hola mundo');
      this.$http.post('businesses', {businesses: this.businesses}).then(response => {
        console.log(response);
        this.businesses =  [];
        this.showMessage('Empresas registradas correctamente');
      }, response => {
        console.log(response);
      });
    },
    getExcel() {
      var rows = this.stringExcel.split('\n');
      rows.forEach(item => {
        var data = item.split('\t');
        var business = {
          name: data[0],
          employees: data[1],
          telephone: data[2],
          date: data[3],
        }
        console.log(business);
        if (business.name) {
          this.businesses.push(business);
        }
      })
      this.stringExcel = '';
    }
  }
}
</script>

<style lang="css">
</style>
