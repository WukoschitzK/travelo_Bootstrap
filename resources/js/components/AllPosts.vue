<template>
    <div>
        <h2 class="fw-bold font-yellow">What's new!</h2>
        <p class="h2_subheadline fw-light lh-sm mb-lg-section">Die letzten Einträge bei Travelo.</p>

        <div class="d-lg-flex flex-wrap justify-content-between mb-lg-section">
            <div v-for="(post, i) in posts" :key=i class="w-lg-45">
                <div class="row mb-5">
                    <div class="col-2 fw-bold date-wrapper">
                        <div class="border-bottom text-center">{{ splitDate(post.created_at).day }}</div>
                        <div class="text-center">{{ splitDate(post.created_at).year }}</div>
                    </div>

                    <div class="col-10">
                        <div>
                            <div class="text-place fw-bold mb-2">
                                <div>{{ post.country }} {{ post.city }}</div>
                            </div>
<!--                            <img :src="'/storage/images/post_images/'+ post.image_path" alt="Picture of Post" />-->
                          <img :src="post.image_path" alt="Picture of Post" class="w-100"/>

                            <div class="fw-bold post-headline mt-3">{{ post.title }}</div>
                            <div class="d-flex justify-content-between">
                                <div class="fw-light mb-3">{{ post.subtitle }}</div>

                                <svg @click="viewPost(i)" class="align-self-end icon-more" v-bind:class="{'rotate-icon': postDialogVisible}" xmlns="http://www.w3.org/2000/svg" width="39" height="27" viewBox="0 0 39 27">
                                    <path id="Polygon_8" data-name="Polygon 8" d="M19.5,0,39,27H0Z" transform="translate(39 27) rotate(180)"/>
                                </svg>
                            </div>

                            <div v-if="currentPost.id == post.id">
                                <div v-if="postDialogVisible">
                                    <div v-for="(img, i) in currentPost.post_images" :key=i>
                                        <img :src="img.post_image_path" alt="">
                                    </div>
                                    <h3 class="fw-bold">Die Story</h3>
                                    <p>{{ currentPost.body }}</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</template>

<script>
import { mapState } from 'vuex';
import axios from "axios";

export default {
    name: 'all-posts',
    data() {
        return {
            postDialogVisible: false,
            currentPost: '',
            posts: [],
        };
    },
    computed: {
        ...mapState(['posts'])
    },
    beforeMount() {
        // this.$store.dispatch('getAllPosts');
    },
    methods: {
        splitDate(date) {
            var arr1 = date.split('-');
            var arr2 = arr1[0].split('0');

            var newDate = {
                year: arr2[1],
                day: arr1[1]
            }

            return newDate;
        },
        truncateText(text) {
            if (text.length > 24) {
                return `${text.substr(0, 24)}...`;
            }
            return text;
        },
        viewPost(postIndex) {
            const post = this.posts[postIndex];
            this.currentPost = post;

            if (!this.postDialogVisible) {
                this.postDialogVisible = true;
            } else {
                this.postDialogVisible = false;
            }
        },
        getPosts() {
            axios
                .get(
                    "/api/posts"
                )
                .then((res) => {
                    this.posts = res.data;

                    consolegit.log(res.data);

                });
        },
    },
    created() {
        this.getPosts();
    },
}
</script>
