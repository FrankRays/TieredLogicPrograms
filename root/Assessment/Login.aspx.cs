using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Web.Configuration;
using System.Data.SqlClient;
using System.Data;

public partial class Login : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {

    }
    protected void LoginButton_Click(object sender, EventArgs e)
    {
        string s = WebConfigurationManager.ConnectionStrings["DatabaseConnectionString"].ConnectionString;
        SqlConnection con = new SqlConnection(s);
        SqlCommand sqlComm = new SqlCommand();
        SqlDataReader reader;

        sqlComm.CommandText = String.Format("select EmployeeID, LastName, FirstName, Password from Employees where Email=@Email");
        sqlComm.Parameters.AddWithValue("@Email", Email.Text);
        sqlComm.CommandType = CommandType.Text;
        sqlComm.Connection = con;

        con.Open();
        reader = sqlComm.ExecuteReader();
        if (reader.Read())
        {
            if (reader["Password"].ToString() == Password.Text)
            {
                Session["EmployeeID"] = reader["EmployeeID"].ToString();
                Session["LastName"] = reader["LastName"].ToString();
                Session["FirstName"] = reader["FirstName"].ToString();
                Response.Redirect("./Home.aspx");
            }
            else
            {
                lblMessage.Text = "You entered the wrong password";
                Session["EmployeeID"] = "";
                Session["LastName"] = "";
                Session["FirstName"] = "";
            }            
        }
        else
        {
            lblMessage.Text = "You entered the wrong email";
            Session["EmployeeID"] = "";
            Session["LastName"] = "";
            Session["FirstName"] = "";
        }
    }
}