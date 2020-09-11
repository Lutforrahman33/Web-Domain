<template>
  <div class="w-100 mt-4">

    <div class="row">
       <div class="col-12 p-2">
        <div class="categoryBox w=100 align-items-center py-2" @click="selectall">
          <h5 class="text-center">All Domain</h5>
        </div>
       </div>
       <div class="col-4 p-2" v-for="category in categories">
        <div class="categoryBoxs w-100 align-items-center py-2" @click="selectcat(category.id)">
          <h5 class="text-center">{{category.name}}</h5>
        </div> 
       </div>
       <div>
       </div>   
    </div>

    <hr>

    <div class="row mt-5">
      <div class="col-3 p-1" v-for="subcategory in filterSubCategories">
        <div class="subcategoryBoxs w-100 align-items-center py-2" @click="selectsubcat(subcategory.id)">
          <h5 class="text-center">{{ subcategory.subcategoryname}}</h5>
        </div>
      </div>   
    </div>

    <hr>

    <div class="row mt-3">
      <div class="col-6 p-1" v-for="domain in filterDomains">
        <div class="card">
          <div class="card-body">
            <p><strong>Website Name: {{ domain.title }}</strong></p>
            <p><strong>Website Address: <a :href="domain.url">{{domain.url}}</a></strong></p>
          </div>
        </div>
      </div>   
    </div>
    
  </div>
</template>

<script>
export default{
  props: ['domains' , 'categories' , 'subcategories'],
       data(){
        return{
          selectc: '',
          selects: '',

        }
       },

       methods: {
        selectall() {
          this.selectc = '';
          this.selects = '';
        },

         selectcat: function  (id) {
           this.selectc = id;
           this.selects = '';
         } ,

         selectsubcat: function (id) {
          
           this.selects = id;
         } 

       },

       computed: {
        filterSubCategories: function() {
          return this.subcategories.filter((item) =>  item.category_id == this.selectc);
        },
        filterDomains: function () {
          if(this.selects === '' , this.selectc === ''){
            return this.domains;
          }else if (this.selectc === '' && this.selects != ''){
                 return this.domains.filter((item) => item.subcategory_id == this.selects); 
          }else if (this.selectc != '' && this.selects === ''){
                 return this.domains.filter((item) => item.category_id == this.selectc); 
          }else if (this.selectc != '' && this.selects != ''){
                 return this.domains.filter((item) => item.subcategory_id == this.selects); 
          }
        }

  }
  }

</script>