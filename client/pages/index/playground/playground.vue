<template>
  <div class="playground" :class="{ 'visible' : visible }">
   
    <div class="playground__inner" v-if="content">
      <div class="playground__headline">
        {{content.title}} 
        <div class="playground__close" @click="closeWidget()">
          X
        </div>
      </div>
      <div class="playground__body">
        <div class="playground__options">
          <div class="row">
            <div class="col-sm-3 playground__option" 
                 v-for="(option, index) in content.options"
                 :key="index"
                 :class="{ 'playground__option--active' : option === 1}">{{index}}</div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</template>
<script src="./playground.js"></script>
<style src="./playground.sass" lang="sass"></style>