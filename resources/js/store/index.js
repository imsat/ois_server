import Vue from 'vue'
import Vuex from 'vuex'

/** Account */
import account from './module/account'

Vue.use(Vuex)


export default new Vuex.Store({
    strict: true,
    state: {
        isLoading: false,
    },
    modules: {
        account
    },
    getters: {},
    mutations: {},
    actions: {},
})
