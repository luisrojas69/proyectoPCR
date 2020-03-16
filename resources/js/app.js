//Aqui vas mis funciones

        new Vue({
            el: '#app',
            created: function(){
                this.getVehicles();
            },

            data:{
    	      arrayVehicles: [],
		      update :0,
		      submitStatus: null,
		      errors: [],
		      name: '',
		      plate: '',
		      mark: '',
		      model: '',
		      color: '',
		      comment: '',
		      search:'',
		      page: 0,
            },

            methods:{

            //funcion de pruebas
            test: function(){
            	alert("Hola desde la funcion de pruebas");
            },

            //Funcion de Listar  
		    getVehicles: function(){ 
		      let me=this;
		      let url = 'get-vehicles';

		      axios.get(url).then(response => {
		        console.log(response.data.data);
		        me.arrayVehicles = response.data;
		      }).catch(function(error){
		        console.log(error);
		        toastr.error('Ocurrio un error al Listar');
		        me.errors = error.response
		      });
		    },


		    //Funcion para Eliminar un Objeto
		    deleteVehicle: function(vehicle){
		      swal({
		        title: "Está Seguro?",
		        text: "Está seguro de querer eliminar este Elemento?",
		        icon: "warning",
		        buttons: ["Cancelar", "Si, Estoy Seguro!"],
		        dangerMode: true,
		      })
		      .then(willDelete => {
		        if (willDelete) {
		          let me = this;
		          var url = 'vehicle/'+vehicle.id;
		          axios.delete(url).then(response =>{//ELiminamos
		            me.getVehicles();//Listamos
		            toastr.success('Vehiculo Eliminado Correctamente');
		          }).catch(error => {
		            console.log(error);
		            me.errors = error.response.data
		            toastr.error('Ocurrio un error al Eliminar');
		          });
		        }
		      });
		    },


            },

            computed: {

            },
        });
