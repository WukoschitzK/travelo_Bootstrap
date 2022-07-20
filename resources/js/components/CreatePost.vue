<template>
    <div :key="componentKey">
        <h2 class="font-yellow fw-bold">Dein Eintrag zählt.</h2>
        <p class="fw-light h2_subheadline lh-sm mb-lg-section">Erzähl Travelo deine Geschichte.</p>

        <div>
            <form @submit.prevent enctype="multipart/form-data" class="d-lg-flex mb-5 flex-row-reverse justify-content-between">

                <div class="w-lg-40">
                    <label class="d-inline-block color-lightgray mb-2">Upload
                        Image(jpg,png)</label>
                    <div class="d-flex align-items-center justify-content-center mb-5">
                        <label
                            class="pt-5 d-flex flex-column w-100 img-upload align-items-center justify-content-center" for="image_path">
                            <div class="relative d-flex flex-column align-items-center justify-content-center pt-7">
                                <img id="preview" class="absolute inset-0">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="w-25 color-lightgray" viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                          clip-rule="evenodd" />
                                </svg>
                                <p class="color-lightgray fs-4">
                                    Select a photo</p>
                            </div>

                            <input name="image_path" id="image_path" type="file" class="opacity-0" accept="image/*" v-on:change="onImageChange"/>
                        </label>
                    </div>
                </div>

                <div class="w-lg-40">
                    <div class="d-flex flex-column flex-lg-row mb-3">
                        <label for="title" class="w-25">Title</label>
                        <input
                            v-model="newPost.title"
                            id="title"
                            type="text"
                            class="pt-2 ps-2 pb-1 pt-lg-0 w-100"
                        >
                    </div>
                    <div class="d-flex flex-column flex-lg-row mb-3">
                        <label for="subtitle" class="w-25">Subtitle</label>
                        <input
                            v-model="newPost.subtitle"
                            id="subtitle"
                            type="text"
                            required
                            class="pt-2 ps-2 pb-1 pt-lg-0 w-100"
                        >
                    </div>
                    <div class="d-flex flex-column flex-lg-row mb-3">
                        <label for="post-content" class="w-25">Body</label>
                        <textarea id="body" v-model="newPost.body" type="text" rows="15" required class="pt-2 ps-2 pb-1 pt-lg-0 w-100"/>
                    </div>

                    <div class="d-flex flex-column flex-lg-row mb-3">
                        <label for="country" class="w-25">Country</label>
                        <input
                            v-model="newPost.country"
                            id="country"
                            type="text"
                            required
                            class="pt-2 ps-2 pb-1 pt-lg-0 w-100"
                        >
                    </div>
                    <div class="d-flex flex-column flex-lg-row mb-3">
                        <label for="city" class="w-25">City</label>
                        <input
                            v-model="newPost.city"
                            id="city"
                            type="text"
                            required
                            class="pt-2 ps-2 pb-1 pt-lg-0 w-100"
                        >
                    </div>
                </div>
            </form>
        </div>

        <div class="text-center text-lg-start">
            <button
                type="button"
                @click="createPost"
                class="text-white rounded-3 px-4 py-3"
            >Create Post
            </button>
        </div>
    </div>
</template>

<script>
export default {
    name: 'create-post',
    data() {
        return {
            newPost: {
                title: "",
                subtitle: "",
                body: "",
                country: "",
                city: "",
                image_path:""
            }
        };
    },
    computed: {},
    mounted () {},
    methods: {
      onImageChange(e){
        this.newPost.image_path = e.target.files[0];
      },
        createPost (e) {
            e.preventDefault()
            const config = {
              headers: { 'content-type': 'multipart/form-data' }
            }
            this.isCreatingPost = true
            const formData = new FormData()
            formData.append('title', this.newPost.title)
            formData.append('subtitle', this.newPost.subtitle)
            formData.append('body', this.newPost.body)
            formData.append('country', this.newPost.country)
            formData.append('city', this.newPost.city)
            formData.append('image_path', this.newPost.image_path)

            axios.post('/api/create-post', formData, config).then(window.location.reload())
        }
    }
}
</script>
