<template>
    <div>
         <div v-for="category in categories">
             {{ category.name}}
             <ul>
                 <li v-for="subcat in category.subcategory"> {{subcat.subcategoryname}} </li>
             </ul>
             
         </div>
    </div>
</template>

<script>
    export default {
        props: ['categories'],

       
        
    }
</script>
