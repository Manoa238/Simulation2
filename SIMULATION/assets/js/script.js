function scrollToContent() {
    const servicesSection = document.getElementById('services');
    window.scrollTo({
        top: servicesSection.offsetTop - 20,
        behavior: 'smooth'
    });
}
