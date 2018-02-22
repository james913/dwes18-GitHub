

import java.io.IOException;
import java.io.PrintWriter;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.Date;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class fechayhora
 */
@WebServlet("/fechayhora")
public class fechayhora extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public fechayhora() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
    protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        // TODO Auto-generated method stub
        PrintWriter out = response.getWriter();
        
        out.println("<html><head><meta charset='utf-8'/><title>Fecha y Hora</title></head>");
        Date fecha= new Date();
        //Caso 1: obtener la fecha , hora y salida por pantalla con formato:
        DateFormat fechahora= new SimpleDateFormat("dd/MM/yyyy HH:mm:ss ");
        out.println("<body><h1>Fecha y Hora</h1>");
        out.println("<p>Fecha y Hora: "+fechahora.format(fecha)+"</p>");
        out.println("<a href='index.html'>Volver</a>");
        out.println("</body></html>");
        
    }

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}
