<template>
   <div>
       <h1>Hello {{ name }}</h1>
   </div>
</template>
<script>
import Default from '../Layout/Default'

export default {
    layout: Default,
    props:{
        name: String
    }
}
</script>