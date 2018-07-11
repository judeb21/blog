<template>
<div class="post-preview">
<img src="image" class="myImage"/>
<a href="slug">
<h2 class="post-title">
{{ title }}
</h2>
</a>
<p class="post-meta">Posted by <a href="#">Anon</a> {{ created_at }}
<a href="" @click.prevent="likeIt">
<small>0</small>
<i class="fa fa-thumbs-up" aria-hidden="true"></i>
</a>
</p>
</div>
</template>

<script>
export default {
props:[
    'title', 'subtitle', 'created_at', 'image'
]
}
</script>
