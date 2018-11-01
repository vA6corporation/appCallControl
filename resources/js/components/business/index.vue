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
              <th>Empresa</th>
              <th>Empleados</th>
              <th>Telefono</th>
              <th>Dato</th>
            </thead>
            <tbody>
              <tr>
                <td>texto</td>
                <td>texto</td>
                <td>texto</td>
                <td>texto</td>
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

}
</script>

<style lang="css">
</style>
