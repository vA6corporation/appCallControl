<template lang="html">
  <div class="form-row">
    <div class="col-3">
      <select class="custom-select form-group" name="">
        <option value="">Todas las Ubicacion</option>
        <option :value="item.id" v-for='(item, index) in places'>{{ item.nombre }}</option>
      </select>
      <select class="custom-select form-group" name="">
        <option value="">Todos los Tipos de empresa</option>
      </select>
      <select class="custom-select form-group" name="">
        <option value="">Todos los Rubros de empresa</option>
      </select>
      <select class="custom-select form-group" name="">
        <option value="">Seleccion</option>
      </select>
      <select class="custom-select form-group" name="">
        <option value="">Todos los colores</option>
      </select>
      <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between">
          Empresas
          <router-link to='/business/create' href='#'>Nuevo <i data-feather='plus'></i> </router-link>
        </li>
        <a
          v-for='(item, index) in businesses'
          class="list-group-item list-group-item-action"
          href='#' @click.prevent='setBusiness($event.target, item)'>
          {{ item.name }}
        </a>
      </ul>
    </div>
    <div class="col-9">
      <div class="card form-group shadow-sm">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title">Empresa</h5>
            <div class="">
              <a href='#'>Guardar <i data-feather='save'></i> </a>
            </div>
          </div>
          <div class="form-row form-group">
            <div class="col-3">
              <select class="custom-select">
                <option value="">Ubicacion</option>
                <option :value="item.id" v-for='(item, index) in places'>{{ item.nombre }}</option>
              </select>
            </div>
            <div class="col-3">
              <select class="custom-select">
                <option value="">Tipo de Empresa</option>
              </select>
            </div>
            <div class="col-3">
              <select name="" id="" class="custom-select">
                <option value="">Rubro de empresa</option>
              </select>
            </div>
            <div class="col-3">
              <select name="" id="" class="custom-select">
                <option value="">Seleccion</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="col-12 form-group">
              <input type="text" class="form-control" v-model='currentBusiness.name' placeholder="Empresa">
            </div>
            <div class="col-6">
              <input type="text" class="form-control" v-model='currentBusiness.telephone' placeholder="Telefonos">
            </div>
            <div class="col-6">
              <input type="text" class="form-control" v-model='currentBusiness.date' placeholder="Dato">
            </div>
          </div>
        </div>
      </div>

      <div class="form-row form-group">
        <div class="col-6">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Contacto 1</h5>
              <input type="text" class="form-control form-group" placeholder="Contacto">
              <input type="text" class="form-control form-group" placeholder="Cargo">
              <input type="text" class="form-control" placeholder="Correo">
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Contacto 2</h5>
              <input type="text" class="form-control form-group" placeholder="Contacto">
              <input type="text" class="form-control form-group" placeholder="Cargo">
              <input type="text" class="form-control" placeholder="Correo">
            </div>
          </div>
        </div>
      </div>

      <div class="form-row form-group">
        <div class="col-6">
          <div class="card shadow-sm">
            <div class="card-header">
              Salud Ocupacional
            </div>
            <div class="card-body">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Brochure Enviado</span>
                </div>
                <input type="text" class="form-control">
                <input type="text" class="form-control">
              </div>
              <div class="form-row">
                <div class="col-3">
                  <div class="card border-light">
                    <div class="card-body">
                      <i data-feather='phone-call'></i>
                    </div>
                  </div>
                </div>
                <div class="col-9 p-3">
                  <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4">Mañana</div>
                    <div class="col-4">Tarde</div>
                  </div>
                  <div class="d-flex justify-content-between">
                    <span>Ausentes</span>
                    <div class="form-row">
                      <div class="col-6 morning">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                      </div>
                      <div class="col-6 late">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between">
                    <span>Posibles</span>
                    <div class="form-row">
                      <div class="col-6 morning">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                      </div>
                      <div class="col-6 late">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Programas LLamada</span>
                  </div>
                  <input type="text" class="form-control">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-row">
                <textarea class="form-control" rows="2" placeholder="Comentario"></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card shadow-sm">
            <div class="card-header">
              ETAS y Carnet de Sanidad
            </div>
            <div class="card-body">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Brochure Enviado</span>
                </div>
                <input type="text" class="form-control">
                <input type="text" class="form-control">
              </div>
              <div class="form-row">
                <div class="col-3">
                  <div class="card border-light">
                    <div class="card-body">
                      <i data-feather='phone-call'></i>
                    </div>
                  </div>
                </div>
                <div class="col-9 p-3">
                  <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4">Mañana</div>
                    <div class="col-4">Tarde</div>
                  </div>
                  <div class="d-flex justify-content-between">
                    <span>Ausentes</span>
                    <div class="form-row">
                      <div class="col-6 morning">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                      </div>
                      <div class="col-6 late">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between">
                    <span>Posibles</span>
                    <div class="form-row">
                      <div class="col-6 morning">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                      </div>
                      <div class="col-6 late">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Programas LLamada</span>
                  </div>
                  <input type="text" class="form-control">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-row">
                <textarea class="form-control" rows="2" placeholder="Comentario"></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="form-row form-group">
        <div class="col-6">
          <div class="card shadow-sm">
            <div class="card-header">
              Salud Ocupacional
            </div>
            <div class="card-body">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Brochure Enviado</span>
                </div>
                <input type="text" class="form-control">
                <input type="text" class="form-control">
              </div>
              <div class="form-row">
                <div class="col-3">
                  <div class="card border-light">
                    <div class="card-body">
                      <i data-feather='phone-call'></i>
                    </div>
                  </div>
                </div>
                <div class="col-9 p-3">
                  <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4">Mañana</div>
                    <div class="col-4">Tarde</div>
                  </div>
                  <div class="d-flex justify-content-between">
                    <span>Ausentes</span>
                    <div class="form-row">
                      <div class="col-6 morning">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                      </div>
                      <div class="col-6 late">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between">
                    <span>Posibles</span>
                    <div class="form-row">
                      <div class="col-6 morning">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                      </div>
                      <div class="col-6 late">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Programas LLamada</span>
                  </div>
                  <input type="text" class="form-control">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-row">
                <textarea class="form-control" rows="2" placeholder="Comentario"></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card shadow-sm">
            <div class="card-header">
              ETAS y Carnet de Sanidad
            </div>
            <div class="card-body">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Brochure Enviado</span>
                </div>
                <input type="text" class="form-control">
                <input type="text" class="form-control">
              </div>
              <div class="form-row">
                <div class="col-3">
                  <div class="card border-light">
                    <div class="card-body">
                      <i data-feather='phone-call'></i>
                    </div>
                  </div>
                </div>
                <div class="col-9 p-3">
                  <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4">Mañana</div>
                    <div class="col-4">Tarde</div>
                  </div>
                  <div class="d-flex justify-content-between">
                    <span>Ausentes</span>
                    <div class="form-row">
                      <div class="col-6 morning">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                      </div>
                      <div class="col-6 late">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between">
                    <span>Posibles</span>
                    <div class="form-row">
                      <div class="col-6 morning">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                      </div>
                      <div class="col-6 late">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Programas LLamada</span>
                  </div>
                  <input type="text" class="form-control">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-row">
                <textarea class="form-control" rows="2" placeholder="Comentario"></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="form-row form-group">
        <div class="col-6">
          <div class="card shadow-sm">
            <div class="card-header">
              Salud Ocupacional
            </div>
            <div class="card-body">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Brochure Enviado</span>
                </div>
                <input type="text" class="form-control">
                <input type="text" class="form-control">
              </div>
              <div class="form-row">
                <div class="col-3">
                  <div class="card border-light">
                    <div class="card-body">
                      <i data-feather='phone-call'></i>
                    </div>
                  </div>
                </div>
                <div class="col-9 p-3">
                  <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4">Mañana</div>
                    <div class="col-4">Tarde</div>
                  </div>
                  <div class="d-flex justify-content-between">
                    <span>Ausentes</span>
                    <div class="form-row">
                      <div class="col-6 morning">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                      </div>
                      <div class="col-6 late">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between">
                    <span>Posibles</span>
                    <div class="form-row">
                      <div class="col-6 morning">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                      </div>
                      <div class="col-6 late">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Programas LLamada</span>
                  </div>
                  <input type="text" class="form-control">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-row">
                <textarea class="form-control" rows="2" placeholder="Comentario"></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card shadow-sm">
            <div class="card-header">
              ETAS y Carnet de Sanidad
            </div>
            <div class="card-body">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Brochure Enviado</span>
                </div>
                <input type="text" class="form-control">
                <input type="text" class="form-control">
              </div>
              <div class="form-row">
                <div class="col-3">
                  <div class="card border-light">
                    <div class="card-body">
                      <i data-feather='phone-call'></i>
                    </div>
                  </div>
                </div>
                <div class="col-9 p-3">
                  <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4">Mañana</div>
                    <div class="col-4">Tarde</div>
                  </div>
                  <div class="d-flex justify-content-between">
                    <span>Ausentes</span>
                    <div class="form-row">
                      <div class="col-6 morning">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                      </div>
                      <div class="col-6 late">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between">
                    <span>Posibles</span>
                    <div class="form-row">
                      <div class="col-6 morning">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                      </div>
                      <div class="col-6 late">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                        <input type="checkbox">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Programas LLamada</span>
                  </div>
                  <input type="text" class="form-control">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-row">
                <textarea class="form-control" rows="2" placeholder="Comentario"></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    this.$http.get('businesses').then(response => {
      console.log(response);
      this.businesses = response.body;
    }, response => {
      console.log(response);
    });
    this.$http.get('places').then(response => {
      console.log(response);
      this.places = response.body.places;
    }, response => {
      console.log(response);
    });
  },
  data() {
    return {
      businesses: [],
      places: [],
      currentBusiness: {},
    }
  },
  methods: {
    setBusiness(el, business) {
      console.log(business);
      this.currentBusiness =  business;
      $('.active').removeClass('active');
      $(el).addClass('active');
    }
  }
}
</script>

<style lang="css">
</style>
