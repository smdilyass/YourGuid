// document.addEventListener("DOMContentLoaded", () => {
//   // Countdown Timer
//   const countdownTimer = () => {
//     const targetDate = new Date("2030-06-08T00:00:00Z").getTime()

//     const updateTimer = () => {
//       const now = new Date().getTime()
//       const difference = targetDate - now

//       if (difference <= 0) {
//         document.getElementById("days").textContent = "00"
//         document.getElementById("hours").textContent = "00"
//         document.getElementById("minutes").textContent = "00"
//         document.getElementById("seconds").textContent = "00"
//         return
//       }

//       const days = Math.floor(difference / (1000 * 60 * 60 * 24))
//       const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))
//       const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60))
//       const seconds = Math.floor((difference % (1000 * 60)) / 1000)

//       document.getElementById("days").textContent = days.toString().padStart(2, "0")
//       document.getElementById("hours").textContent = hours.toString().padStart(2, "0")
//       document.getElementById("minutes").textContent = minutes.toString().padStart(2, "0")
//       document.getElementById("seconds").textContent = seconds.toString().padStart(2, "0")
//     }

//     updateTimer()
//     setInterval(updateTimer, 1000)
//   }

//   // Initialize countdown
//   countdownTimer()

//   // Mobile Menu Toggle
//   const mobileMenuButton = document.getElementById("mobile-menu-button")
//   if (mobileMenuButton) {
//     // Implement mobile menu functionality
//   }

//   // Map Interaction
//   const cityButtons = document.querySelectorAll(".city-button")
//   const cityInfos = document.querySelectorAll(".city-info")

//   cityButtons.forEach((button) => {
//     button.addEventListener("click", function () {
//       const cityId = this.getAttribute("data-city")

//       // Hide all city infos
//       cityInfos.forEach((info) => {
//         info.classList.add("hidden")
//       })

//       // Remove active class from all buttons
//       cityButtons.forEach((btn) => {
//         btn.classList.remove("bg-green-50", "text-green-800")
//       })

//       // Show selected city info and highlight button
//       const cityInfo = this.nextElementSibling
//       if (cityInfo.classList.contains("hidden")) {
//         cityInfo.classList.remove("hidden")
//         this.classList.add("bg-green-50", "text-green-800")
//       }

//       // Highlight map pin
//       const mapPins = document.querySelectorAll("#morocco-map [data-location]")
//       mapPins.forEach((pin) => {
//         if (pin.getAttribute("data-location") === cityId) {
//           pin.querySelector("svg").classList.add("text-red-600", "fill-red-600", "scale-125")
//         } else {
//           pin.querySelector("svg").classList.remove("text-red-600", "fill-red-600", "scale-125")
//         }
//       })
//     })
//   })

//   // Map pin interaction
//   const mapPins = document.querySelectorAll("#morocco-map [data-location]")
//   mapPins.forEach((pin) => {
//     pin.addEventListener("click", function () {
//       const locationId = this.getAttribute("data-location")

//       // Find and click the corresponding city button
//       const cityButton = document.querySelector(`.city-button[data-city="${locationId}"]`)
//       if (cityButton) {
//         cityButton.click()

//         // Scroll to city list on mobile
//         if (window.innerWidth < 768) {
//           document.getElementById("city-list").scrollIntoView({ behavior: "smooth" })
//         }
//       }
//     })
//   })
// })

