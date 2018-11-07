<template>
  <div class="test">
    <div class="debug" :class="{ 'visible' : debugVisible }">
      
      <div class="container">
        <div class="trigger" @click="toggleDebug()">
          x
        </div>
        <div class="row">
          <div class="col-sm-12">
            <strong>DEBUG</strong>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-9">Map Loaded</div>
          <div class="col-sm-3">{{mapLoading}}</div>
        </div>
        <div class="row">
          <div class="col-sm-9">Playground Open</div>
          <div class="col-sm-3">{{widgetVisible}}</div>
        </div>
        <div class="row">
          <div class="col-sm-9">Transition State</div>
          <div class="col-sm-3">{{transitionActive}}</div>
        </div>
      </div>


    </div>
    <!-- <loading :visible="!mapLoading"/> -->
    <mapboxWrapper></mapboxWrapper>
    <playground :visible="widgetVisible" :content="widgetContent" />
  </div>
</template>
<script src="./index.js"></script>
<style src="./index.sass" lang="sass"></style>