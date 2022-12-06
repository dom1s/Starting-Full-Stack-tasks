let kvartetas = 6;

if (kvartetas <= 0) {
    console.log('Ne grupėje');
} else if (kvartetas === 1) {
    console.log('Solo');
} else if (kvartetas === 2) {
    console.log('Duetas');
} else if (kvartetas === 3) {
    console.log('Trio');
} else if (kvartetas === 4) {
    console.log('Kvartetas');
} else if (kvartetas >= 5) {
    console.log('Didelė grupė');
} else {
    console.log('Įvyko klaida');
}