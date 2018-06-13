<template>
  <div>
                <input type="file" name="image" @change="GetImage" accept="image/*">
                <img :src="avatar" alt="image">
                <a href="#" v-if="loaded" @click.prevent="upload" class="btn btn-success">Upload</a> 
                <a href="#" v-if="loaded" @click.prevent="cancel" class="btn btn-danger">Cancel</a>  
 
</div>          
</template>

<script>
    export default {
        props:['user'],
        data(){
            return{
                avatar:this.user.avatar,
                loaded:false
            }
        },
        methods:{

            GetImage(e){
                let image = e.target.files[0];
                this.read(image)
                
            },
            upload:function(){
                axios.post('/upload',{'image':this.avatar}).then(res=>this.$toasted.show('Avatar cambiado con exito',{
                    type:'success'
                })
)
            },
            read(image)
            {
                let reader= new FileReader();
                reader.readAsDataURL(image);
                reader.onload=e=>{
                   this.avatar=e.target.result;
                }
            this.loaded=true;

            },
            cancel(){
                this.avatar=this.user.avatar
                this.loaded=false
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
