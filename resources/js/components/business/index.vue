<template lang="html">
  <div class="row">
    <div class="col-12">
      <div class="card p-3 shadow-sm">
        <div class="col-12 form-group">
          <div class="d-flex justify-content-between">
            <span class="lead">Empresas</span>
            <router-link href='#' class="" to='/business/create'>
              Nueva Empresa
              <i data-feather='plus'></i>
            </router-link>
          </div>
        </div>
        <div class="col-12">
          <table class="table table-striped table-bordered table-sm">
            <thead>
              <th>Nombre</th>
              <th>Empleados</th>
              <th>Telefono</th>
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
        </div>
      </div>
    </div>
  </div>

</template>

<script>
export default {
  mounted() {
    this.$http.get('businesses').then(response => {
      this.businesses = response.body;
      console.log(response);
    })
  },
  data() {
    return {
      businesses: []
    }
  }
}
</script>

<style lang="css">
</style>
