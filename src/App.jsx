import { BrowserRouter as Router, Routes, Route } from "react-router-dom";
import Login from "./components/pages/developer/access/Login";
import { QueryClient, QueryClientProvider } from "@tanstack/react-query";
import { StoreProvider } from "./store/StoreContext";
import ProtectedRoute from "./components/pages/developer/access/ProtectedRoute";
import Portfolio from "./components/pages/developer/dashboard/portfolio/Portfolio";
import Users from "./components/pages/developer/dashboard/user/Users";
import Introduction from "./components/pages/developer/dashboard/Introduction/Introduction";
import Home from "./components/pages/developer/ui/pages/frontend/Home";
import UIIntroduction from "./components/pages/developer/ui/pages/frontend/Introduction/UIIntroduction";

function App() {

  const queryClient = new QueryClient
  return (
    <>
    <QueryClientProvider client={queryClient}>
    <StoreProvider>
      <Router>
      <Routes>
        <Route path="/home" element={<Home />} />
        <Route path="/login" element={<Login />} />
        <Route path="/dashboard/portfolio" element={<ProtectedRoute><Portfolio /></ProtectedRoute>} />
        <Route path="/dashboard/users" element={<ProtectedRoute><Users /></ProtectedRoute>} />
        <Route path="/dashboard/introduction" element={<ProtectedRoute><Introduction/></ProtectedRoute>} />
        <Route path="/introduction" element={<UIIntroduction/>} />
        <Route path="*" element={<h2>Not Found</h2>} />
      </Routes>
    </Router>
    </StoreProvider>
    </QueryClientProvider>
    </>
  );
}
export default App;