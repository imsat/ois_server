<template>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                Bank Accounts
                <a href="#" class="btn btn-sm btn-primary float-right">Add New</a>
            </h5>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Account Name</th>
                    <th scope="col">Bank</th>
                    <th scope="col">Account No</th>
                    <th scope="col">Branch</th>
                    <th scope="col">Account Type</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(account, i) in accounts" :key="i">
                    <td>{{ account.account_name }}</td>
                    <td>{{ account.financial_organization.name }}</td>
                    <td>{{ account.account_no }}</td>
                    <td>{{ account.branch }}</td>
                    <td>{{ getAccountType(account.account_type) }}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-info float-right mr-1">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger float-right">Delete</a>
                    </td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
</template>

<script>
import {mapState, mapActions} from 'vuex'
export default {
    name: "Account",
    computed: {
        ...mapState('account', [
            'accounts'
        ])
    },
    created() {
        let _this = this;

        _this.getOrganization();
        _this.getAccounts();
    },
    methods: {
        ...mapActions('account', [
            'getOrganization',
            'getAccounts'
        ]),
        getAccountType(type){
            if(type == 1){
                return 'Savings Account'
            }else if (type == 2) {
                return 'Current Account'
            }else if (type == 3) {
                return 'Joint Account'
            }
        }
    }
}
</script>

<style scoped>

</style>
