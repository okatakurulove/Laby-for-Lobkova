const barsik = {
    name: "Барсик",
    furColor: "черная",
    eyeColor: "голубые",
    age: 3.8
};

const funtik = {
    name: "Фунтик",
    furColor: "серая",
    eyeColor: "черные",
    age: 4.1
};


const stephanieAgeHuman = parseFloat(prompt("Введите возраст Стефани в человеческих годах: "));
const stephanieAgeCat = stephanieAgeHuman * 7;

const candidates = [barsik, funtik];

let suitableCandidates = [];

for (let candidate of candidates) {
    const candidateAgeCat = candidate.age * 7;
    if (candidateAgeCat < stephanieAgeCat) {
        suitableCandidates.push(candidate);
    }
}

if (suitableCandidates.length > 0) {
    if (suitableCandidates.length === 1) {
        const chosenCandidate = suitableCandidates[0];
        const ageDifference = stephanieAgeCat - (chosenCandidate.age * 7);
        console.log("Подходящий кандидат: ${chosenCandidate.name}. Разница в возрасте: ${ageDifference} кошачьих лет.");
    } else {
        let oldestOfYoungest = suitableCandidates[0];
        for (let i = 1; i < suitableCandidates.length; i++) {
            if (suitableCandidates[i].age > oldestOfYoungest.age) {
                oldestOfYoungest = suitableCandidates[i];
            }
        }
        const ageDifference = stephanieAgeCat - (oldestOfYoungest.age * 7);
        console.log("Подходящий кандидат: ${oldestOfYoungest.name}. Разница в возрасте: ${ageDifference} кошачьих лет.");
    }
} else {
    console.log("Стефани кандидатов не нашлось.");
}
