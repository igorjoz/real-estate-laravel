import { computed, isRef } from 'vue'

export const useMonthlyPayment = (total, interestRate, duration) => {
    const monthlyPayment = computed(() => {
        const principle = isRef(total) ? total.value : total
        const monthlyInterest = (isRef(interestRate) ? interestRate.value : interestRate) / 100 / 12
        const numberOfPaymentMonths = (isRef(duration) ? duration.value : duration) * 12
        const totalInterestRate = Math.pow(1 + monthlyInterest, numberOfPaymentMonths)

        return principle * monthlyInterest * totalInterestRate / (totalInterestRate - 1)
    })

    const totalPaid = computed(() => {
        const durationInYears = (isRef(duration) ? duration.value : duration)
        return durationInYears * 12 * monthlyPayment.value
    })

    const totalInterest = computed(() => {
        const totalPrice = isRef(total) ? total.value : total
        return totalPaid.value - totalPrice
    })

    return { monthlyPayment, totalPaid, totalInterest }
}
