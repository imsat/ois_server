/**
 * Module to handle Account Section
 * This will be imported in the store/index.js file
 */

export default {
    namespaced: true,
    strict: true,
    state: {
        accounts: [],
        organizations: [],

    },
    mutations: {
        /** Set Up Account */
        SET_ORGANIZATION(state, organizations) {
            state.organizations = organizations
        },
        /** Set Up Account */
        SET_ACCOUNTS(state, accounts) {
            state.accounts = accounts
        },
        /** Sey Pagination for server side */
        SET_PAGINATION(state, data) {
            state.pagination = data;
        }
    },
    actions: {
        /**
         * Get All Organization
         * @param state
         * @param commit
         * @returns {Promise<AxiosResponse<any>>}
         */
        getOrganization({state, commit}) {
            try {
                return axios.get('/api/organizations')
                    .then(response => {
                        commit('SET_ORGANIZATION', response.data)
                        console.log(response)

                    })
                    .catch(error => {
                        console.log(error)
                    })
            } catch (loginError) {
                console.log(loginError)
            }
        },
        /**
         * Get All Accounts
         *
         * @param state
         * @param commit
         * @param event
         * @param event
         * @returns {Promise<AxiosResponse<any>>}
         */
        getAccounts({state, commit}) {
            try {
                return axios.get('/api/accounts')
                    .then(response => {
                        commit('SET_ACCOUNTS', response.data.data)
                        commit('SET_PAGINATION', response.data.meta)
                        console.log(response)

                    })
                    .catch(error => {
                        console.log(error)
                    })
            } catch (loginError) {
                console.log(loginError)
            }
        },
    }
}
