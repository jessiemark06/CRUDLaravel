import { useEffect } from "react";

function App() {

  useEffect(() => {

    fetch("http://127.0.0.1:8000/api/students")
      .then(response => response.json())
      .then(data => {
        console.log(data);
      });

  }, []);

  return (
    <div>
      <h1>Student Management</h1>
    </div>
  );
}

export default App;