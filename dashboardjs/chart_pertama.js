const ctx = document.getElementById("myChart");
const labels = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli"];
const data = {
  labels: labels,
  datasets: [
    {
      label: "My First Dataset",
      data: [65, 59, 80, 81, 56, 55, 40],
      fill: false,
      borderColor: "rgb(75, 192, 192)",
      tension: 0.1,
    },
    {
      label: "My Second Dataset",
      data: [67, 65, 63, 38, 16, 32, 61],
      fill: false,
      borderColor: "rgb(75, 192, 192)",
      tension: 0.1,
    },
  ],
};

new Chart(ctx, {
  type: "line",
  data: data,
});