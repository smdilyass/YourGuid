document.addEventListener("DOMContentLoaded", () => {
    // Countdown Timer
    const countdownTimer = () => {
      const targetDate = new Date("2030-06-08T00:00:00Z").getTime()
  
      const updateTimer = () => {
        const now = new Date().getTime()
        const difference = targetDate - now
  
        if (difference <= 0) {
          document.getElementById("days").textContent = "00"
          document.getElementById("hours").textContent = "00"
          document.getElementById("minutes").textContent = "00"
          document.getElementById("seconds").textContent = "00"
          return
        }
  
        const days = Math.floor(difference / (1000 * 60 * 60 * 24))
        const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))
        const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60))
        const seconds = Math.floor((difference % (1000 * 60)) / 1000)
  
        document.getElementById("days").textContent = days.toString().padStart(2, "0")
        document.getElementById("hours").textContent = hours.toString().padStart(2, "0")
        document.getElementById("minutes").textContent = minutes.toString().padStart(2, "0")
        document.getElementById("seconds").textContent = seconds.toString().padStart(2, "0")
      }
  
      updateTimer()
      setInterval(updateTimer, 1000)
    }
  
    // Initialize countdown
    countdownTimer()
  
    // Star Navigation
    const centerStar = document.getElementById("center-star")
    const categoryButtons = document.querySelectorAll(".category-btn")
    let categoriesVisible = false
  
    centerStar.addEventListener("click", () => {
      categoriesVisible = !categoriesVisible
  
      if (categoriesVisible) {
        // Show categories with animation
        centerStar.classList.add("active")
        categoryButtons.forEach((button, index) => {
          setTimeout(() => {
            button.classList.add("visible")
          }, index * 100)
        })
      } else {
        // Hide categories with animation
        centerStar.classList.remove("active")
        categoryButtons.forEach((button, index) => {
          setTimeout(() => {
            button.classList.remove("visible")
          }, index * 100)
        })
      }
    })
  })
  
  