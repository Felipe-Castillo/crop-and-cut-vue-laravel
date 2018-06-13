<template>
  <div>
  <div v-if="!cropped">
 <vue-avatar
        :width=400
        :height=400
        :border=0
        ref="vueavatar"
        @vue-avatar-editor:image-ready="onImageReady"
        image=""
      >
      </vue-avatar>
      <br>
      <vue-avatar-scale
        ref="vueavatarscale"
        @vue-avatar-editor-scale:change-scale="onChangeScale"
        :width=250
        :min=1
        :max=3
        :step=0.02
      >
      </vue-avatar-scale>
      <br>
  
      <button v-on:click="saveClicked">Click</button>
  </div>

  <div v-else >
   <img :src="croppedImage">
    <button v-on:click="startCropping">Back</button>
  
  </div>


 
</div>          
</template>

<script>
import Vue from 'vue'
import VueAvatar from '../vue-avatar-editor/src/components/VueAvatar.vue'
import VueAvatarScale from '../vue-avatar-editor/src/components/VueAvatarScale.vue'

    export default {
    components: {
    VueAvatar,
    VueAvatarScale
  },
  data(){
    return {
       croppedImage:null,
       cropped:false 
    }
  },
  methods:{
    onChangeScale (scale) {
        console.log("ewedew");
        this.$refs.vueavatar.changeScale(scale)
    },
    saveClicked(){
      var img = this.$refs.vueavatar.getImageScaled()
      this.croppedImage=img.toDataURL();
      // use img
      this.cropped=true;
    },
    onImageReady(scale){
      this.$refs.vueavatarscale.setScale(scale)
    },
    startCropping(){
        this.cropped=false
    }
  }
    }
</script>
