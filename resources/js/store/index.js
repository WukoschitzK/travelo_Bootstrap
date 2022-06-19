import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

const debug = process.env.NODE_ENV !== 'production';

export default new Vuex.Store({
    state: {
        posts: [],
    },

    actions: {
        async getAllPosts({ commit }) {
            return commit('setPosts', await api.get("/api/posts/"))
        },
    },

    mutations: {
        setPosts(state, response) {
            state.posts = response.data.data;
        },
    },
    strict: debug
});
