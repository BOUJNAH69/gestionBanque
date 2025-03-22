function showSection(sectionId) {
    const sections = document.querySelectorAll('.section');
    sections.forEach(section => {
        section.style.display = 'none';
    });
    document.getElementById(sectionId).style.display = 'block';
}

// Afficher par défaut la liste des clients au chargement
window.onload = function() {
    showSection('clientsList');
};
