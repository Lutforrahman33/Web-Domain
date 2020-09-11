<template>
  <div>
      <form method="POST" enctype="multipart/form-data" @submit.prevent="submitdomain">
         
           <!--  -->

         <div class="form-group">
           <label for="category">Select a Category</label>
           <select class="form-control" id="category" v-model="form.category_id">
               <option v-for="category in this.categories" :value="category.id">
                 {{ category.name }}
               </option>             
           </select>
         </div>
          
         <div class="form-group">
           <label for="subcategory">Select a Subcategory</label>
           <select class="form-control" id="subcategory" v-model="form.subcategory_id">
               <option v-for="subcategory in filterSubCategories" :value="subcategory.id">
                 {{ subcategory.subcategoryname }}
               </option>
           </select>
         </div>

         <div class="form-row">
          <div class="form-group col-md-6">
            <label for="email"> Email:</label>
            <input type="email" :class="{'is-invalid' : form.errors.has('email') }" class="form-control" placeholder="Enter your Email" v-model="form.email" @keydown="form.errors.clear()"> 
            <div class="invalid-feedback" v-show="form.errors.has('email')" v-text="form.errors.get('email')"></div>
          </div>
         </div>

         <div class="form-row">
          <div class="form-group col-md-6">
            <label for="url"> Enter Your Domain Url:</label>
            <input type="text" :class="{'is-invalid' : form.errors.has('url') }" class="form-control" placeholder="https://your-domain.com" v-model="form.url" @keydown="form.errors.clear()"> 
            <div class="invalid-feedback" v-show="form.errors.has('url')" v-text="form.errors.get('url')"></div>
          </div>
         </div>
 
         <div class="form-group">
           <label for="title">Your domain title </label>
           <input type="text" :class="{'is-invalid' : form.errors.has('title') }" class="form-control" v-model="form.title" @keydown="form.errors.clear()">
           <div class="invalid-feedback" v-show="form.errors.has('title')" v-text="form.errors.get('title')">
           </div>
         </div>

         <div class="input-group mb-3">
           <input type="file" id="img" class="form-control-file">
         </div>

         <div class="form-group">
           <label for="shortdes">Short Description: </label>
           <input type="text" :class="{'is-invalid' : form.errors.has('shortdes') }" class="form-control" v-model="form.shortdes" @keydown="form.errors.clear()">
           <div class="invalid-feedback" v-show="form.errors.has('shortdes')" v-text="form.errors.get('shortdes')">
           </div>
         </div>

         <div class="form-group">
           <vue-editor v-model="form.desc"></vue-editor>
         </div>
        
         <button type="submit" class="btn btn-success">Submit your Button</button>
      </form>
  </div>
</template>



<script>
  import { VueEditor } from "vue2-editor";
  export default {
    props: ['categories' , 'subcategories'],
    components:{
      VueEditor
    },
     data(){
      return {
        form: new Form({
          email:'' ,
          title: '',
          url:'',
          shortdes:'',
          desc:'',
          category_id:'1',
          subcategory_id:'',
          
        })

      }
     },
     methods: {
         submitdomain(){
          let data = new FormData();
          data.append('title' , this.form.title);
          data.append('email' , this.form.email);
          data.append('url' , this.form.url);
          data.append('shortdes' , this.form.shortdes);
          data.append('desc' , this.form.desc);
          data.append('category_id' , this.form.category_id);
          data.append('subcategory_id' , this.form.subcategory_id);
          if(document.getElementById('img').files[0]) { 
            data.append('img' , document.getElementById('img').files[0]) 
          }

          axios.post('/domain' , data)
          .then((response) =>{
            this.form.reset();
            document.getElementById('img').value = '';
          })
          .catch(error => this.form.errors.record(error.response.data));
         }
     },

    computed: {
        filterSubCategories: function() {
          return this.subcategories.filter((item) =>  item.category_id == this.form.category_id);
        }
    }
      
  }
    
</script>