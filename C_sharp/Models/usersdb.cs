using Microsoft.EntityFrameworkCore;
using System.Linq;
using System.Threading.Tasks;

namespace intro_C_sharp_api.Models
{
    public class Users
    {
        public int UsersId { get; set; }
        public string Email { get; set; }
        public string Password { get; set; }
        public string Rôle { get; set; }
    }
    public class UsersContext : DbContext
    {
        public DbSet<Users> Users { get; set;  }
        protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
        {
            optionsBuilder.UseSqlServer(
                @"Server=(localdb)\mssqllocaldb;Database=user;Integrated Security=True");
        }
    }
}
